import React, { Component } from 'react';
import config from 'react-global-configuration';

import Overlay from '../Miscelania/Overlay';
import Header from '../Layout/Header';
import { Link } from 'react-router-dom';

import Button from '@mui/material/Button';
import Fab from '@mui/material/Fab';
import Stack from '@mui/material/Stack';
import AddIcon from '@mui/icons-material/Add';
import AddCircleIcon from '@mui/icons-material/AddCircle';
import EditIcon from '@mui/icons-material/Edit';
import DeleteIcon from '@mui/icons-material/Delete';
import { DataGrid, ptBR, GridToolbarContainer, GridToolbarColumnsButton, GridToolbarExport, gridClasses } from '@mui/x-data-grid';
import Container from '@mui/material/Container';

class {{ $data['pascal_plural'] }} extends Component {

    constructor(props) {

        super(props);
    
        this.state = {
          overlay: {
            message: '',
            type: '',
            status: 'open',
          },
          redirect_url: false,
          loaded: 0,
          data: [],
          columns: [],
          rows: [],
        };
        //Handlers
        this.handleAlert = this.handleAlert.bind(this);
        this.handleLoaded = this.handleLoaded.bind(this);
        this.handleMessage = this.handleMessage.bind(this);
    
        this.loadData = this.loadData.bind(this);
        this.delete = this.delete.bind(this);
        this.deleteRow = this.deleteRow.bind(this);
        this.ActionsButtons = this.ActionsButtons.bind(this);
        this.TableData = this.TableData.bind(this);
        this.CustomToolbar = this.CustomToolbar.bind(this);
    }

    // Handlers
    handleAlert(message, type, status, mode) {
        if(mode === 'reset') {
            this.setState({overlay: {message: '', type: '', status: 'closed'}});
        } else {
            this.setState({overlay: {message: message, type: type, status: status}});
        }
    }

    handleLoaded(state) {
        if(this.state.loaded !== 2) {
            this.setState({loaded: state});
        }
    }

    handleMessage () {
        var message = localStorage.getItem("verify_message");
        if (message !== null && typeof message !== 'undefined') {
            message = JSON.parse(message);
            var self = this;
            self.setState({overlay: {message: message.alert_message, type: message.alert_type, status: 'open'}});
            localStorage.removeItem("verify_message");
        }
    }

    componentDidMount () {
        this.loadData();
    }

    componentDidUpdate(prevProps, prevState) {
        if(this.state.loaded === 1 && prevState.loaded === 0) {
            this.setState({loaded: 2}, this.loadData());
        }
    }

    loadData() {
        var self = this;
        var header = {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' +localStorage.getItem('token'),
        }; 
        Promise.resolve(header).then(function(value) {
          fetch(config.get('api') + '/{{$data['plural']}}', { method: 'GET', mode: 'cors', headers: value }).then((response) => response.json()).catch((error) => { console.error(error); }).then((responseJson) => {
            if (responseJson.status === 'success') {
              self.setState({data: responseJson.data});
              self.TableData(responseJson.data);
            }
          }).then(() => {
            self.setState({overlay: {message: '', type: '', status: 'closed'}});
            self.handleMessage();
          }); /* Overlay */
        });
      }

      delete (event) {
        var id = event.currentTarget.value;
        var confirm = window.confirm('Tem certeza que gostaria de deletar esse registro?');
        if (confirm) {
          this.handleAlert('', '', 'open');
        var header = {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' +localStorage.getItem('token'),
        };
          var self = this;
          Promise.resolve(header).then(function(value) {
            fetch(config.get('api') + '/{{$data['plural']}}/' + id, { method: 'DELETE', mode: 'cors', headers: value }).then((response) => response.json()).catch((error) => { console.error(error); }).then((responseJson) => {
              if (responseJson.status === 'success') {
                self.deleteRow(id);
              }
              self.handleAlert(responseJson.message, responseJson.status, 'open');
            }).catch((error) => {
              console.error(error);
            });
          });      
        }
      }

      deleteRow(id) {
        var data = this.state.data;
        data.map(function(dado, index){
          if (dado.id == id) {
            data.splice(index, 1);
          }
        });
        this.loadData();
      }

      ActionsButtons (row) {
        var url = '/{{$data['plural']}}/update/' + row.id;
        
        var botao = (
          <Stack direction="row" justifyContent="left" spacing={2}>
            <Fab size="small" color="primary" href={url}>
              <EditIcon />
            </Fab>
            <Fab size="small" color="secondary" value={row.id} onClick={this.delete}>
              <DeleteIcon />
            </Fab>
          </Stack>
        );
    
        return botao;
      }

      TableData (data) {
        var self = this;

        const columns = [
@foreach($data['fields'] as $field)
@if($field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
          { field: '{{$field['name']}}', headerName: '{{$field['pascal']}}', flex: 1, minWidth: 150 },
@endif
@endforeach
          { field: 'actions', headerName: 'Ações', flex: 1, minWidth: 150, renderCell: this.ActionsButtons },
        ];
        
        const rows = 
          data.map(function(k) {
            return {
@foreach($data['fields'] as $field)
@if($field['name'] == 'active' || $field['name'] == 'status' || $field['type'] == 'date')
              {{$field['name']}}: k.{{$field['name']}}_str,
@elseif($field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
              {{$field['name']}}: k.{{$field['name']}},
@endif
@endforeach
              actions: k.id,
            }
          });
        this.setState({columns: columns});
        this.setState({rows: rows});
      }

      CustomToolbar () {
        return(
          <GridToolbarContainer className={gridClasses.toolbarContainer}>
            <GridToolbarColumnsButton />
            <GridToolbarExport />
          </GridToolbarContainer>
        )
      }

    render() {
        var self = this;
    return(
        <div>
            <Header></Header>
            <Overlay overlay={this.state.overlay} handleAlert={this.handleAlert} />
            <Container>
                <div className="conteudo">
                    <h3>Listagem</h3>
                    <Stack direction="row" justifyContent="flex-end" spacing={2}>
                      <Fab variant="extended" size="medium" color="primary" href="/{{$data['plural']}}/add">
                        <AddCircleIcon sx={{"{{"}} mr: 1 }} /> Cadastrar
                      </Fab>
                    </Stack>
                    <div className="clearfix"></div>
                    <hr/>
                    <div style={{"{{"}} height: 500, width: '100%' }}>
                      <DataGrid
                        localeText={ptBR.components.MuiDataGrid.defaultProps.localeText}
                        rows={self.state.rows}
                        columns={self.state.columns}
                        pageSize={10}
                        rowsPerPageOptions={[10, 20, 50, 100]}
                        components={{"{{"}}
                          Toolbar: this.CustomToolbar,
                        }}
                      />
                  </div>
                </div>
            </Container>
        </div>
    );
    }
}

export default {{ $data['pascal_plural'] }};