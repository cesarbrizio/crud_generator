import React, { Component } from 'react';
import config from 'react-global-configuration';

import Overlay from '../Miscelania/Overlay';
import Header from '../Layout/Header';
import { Link, Navigate } from 'react-router-dom';

import moment from 'moment'
import AdapterMoment from '@material-ui/lab/AdapterMoment';
import LocalizationProvider from '@material-ui/lab/LocalizationProvider';

import Button from '@mui/material/Button';
import Fab from '@mui/material/Fab';
import Stack from '@mui/material/Stack';
import SaveIcon from '@mui/icons-material/Save';
import ArrowBackIcon from '@mui/icons-material/ArrowBack';
import Container from '@mui/material/Container';
import Grid from '@mui/material/Grid';
import InputLabel from '@mui/material/InputLabel'
import FormHelperText from '@mui/material/FormHelperText';
import FormControl from '@mui/material/FormControl';
import FormControlLabel from '@mui/material/FormControlLabel';
import TextField from '@mui/material/TextField';
import MenuItem from '@mui/material/MenuItem';
import Select from '@mui/material/Select';
import Switch from '@mui/material/Switch';
import DatePicker from '@material-ui/lab/DatePicker';
import DateTimePicker from '@material-ui/lab/DateTimePicker';

class {{$data['pascal_singular']}}Add extends Component {

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
@foreach($data['fields'] as $field)
@if($field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
@if(!empty($field['options']))
          {{$field['name']}}_options: [],
@endif
          {{$field['name']}}: '',
@endif
@endforeach
@if(!empty($data['related_tables']))
@foreach($data['related_tables'] as $related_table)
          {{$related_table['table']}}_options: [],
@endforeach
@endif
        };
        //Handlers
        this.handleAlert = this.handleAlert.bind(this);
        this.handleLoaded = this.handleLoaded.bind(this);
        this.handleMessage = this.handleMessage.bind(this);
    
        this.loadData = this.loadData.bind(this);
        this.add = this.add.bind(this);
        this.validate = this.validate.bind(this);
    }

    // Handlers
    handleChange (name, event) {
      var change = {};
      change[name] = event.target.value;
      this.setState(change);
    }

    handleDataChange (name, date) {
      var change = {};
      change[name] = moment(date, 'MM-DD-YYYY').format("YYYY-MM-DD");
      this.setState(change);
    }

    handleDateTimeChange (name, date) {
      var change = {};
      change[name] = moment(date, 'MM-DD-YYYY HH:mm').format("YYYY-MM-DD HH:mm");
      this.setState(change);
    }

    handleChangeSwitch (name, event) {
      var change = {};
      change[name] = event.target.checked;
      this.setState(change);
    }

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
      //request_api
      this.loadData();
    }

    validate (data) {
@foreach($data['fields'] as $field)
@if($field['name'] !== 'id' && $field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
      if (typeof data.{{$field['name']}} !== 'undefined') {
        var {{$field['name']}} = data.{{$field['name']}};
        this.setState({error_{{$field['name']}}: true});
        this.setState({helperText_{{$field['name']}}: {{$field['name']}}});
      }
@endif
@endforeach
    }

    loadData () {
      var self = this;
      var header = {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' +localStorage.getItem('token'),
      };
      Promise.resolve(header).then(function(value) {
@if(!empty($data['related_tables']))
        var url = config.get('api') + '/{{$data['plural']}}/related/options';
        fetch(url, { method: 'GET', mode: 'cors', headers: value }).then((response) => response.json()).catch((error) => { console.error(error); }).then((responseJson) => {
          if (responseJson.status === 'success') {
            self.setState({
@foreach($data['related_tables'] as $related_table)
              {{$related_table['table']}}_options: responseJson.{{$related_table['table']}}_options,
@endforeach
            });
          }
        }).then(() => {
@endif
@foreach($data['fields'] as $field)
@if(!empty($field['options']))
        var url = config.get('api') + '/{{$data['plural']}}/{{$field['name']}}/options';
        fetch(url, { method: 'GET', mode: 'cors', headers: value }).then((response) => response.json()).catch((error) => { console.error(error); }).then((responseJson) => {
          if (responseJson.status === 'success') {
            self.setState({
              {{$field['name']}}_options: responseJson.data,
            });
          }
        }).then(() => {
@endif
@endforeach
          self.setState({overlay: {message: '', type: '', status: 'closed'}});
          self.handleMessage();
@if(!empty($data['related_tables']))
        });
@endif
@foreach($data['fields'] as $field)
@if(!empty($field['options']))
        });
@endif
@endforeach
      });
    }

    add(event) {
      event.preventDefault();
      var datasave = {
@foreach($data['fields'] as $field)
@if($field['name'] !== 'id' && $field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
        {{$field['name']}}: this.state.{{$field['name']}},
@endif
@endforeach
      };
      var self = this;
      var header = {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' +localStorage.getItem('token'),
      }; 
      Promise.resolve(header).then(function(value) {
        fetch(config.get('api') + '/{{$data['plural']}}', { method: 'POST', mode: 'cors', headers: value, body: JSON.stringify(datasave) }).then((response) => response.json()).catch((error) => { console.error(error); }).then((responseJson) => {
          if (responseJson.status === 'success') {
            var url = '/{{$data['plural']}}/update/' + responseJson.data.id;
            var storage = {
              alert_message: responseJson.message,
              alert_type: responseJson.status,
            };
            self.handleAlert(responseJson.message, responseJson.status, 'open');
            localStorage.setItem("verify_message", JSON.stringify(storage));
            self.setState({redirect_url: url});
          } else if (responseJson.message === 'The given data was invalid.') {
            self.validate(responseJson.errors);
          }
        }).catch((error) => {
          console.error(error);
        });
      });
    }

    render() {
      var self = this;
    return(
        <div>
          <Header></Header>
          <Overlay overlay={this.state.overlay} handleAlert={this.handleAlert} />
          {this.state.redirect_url ? <Navigate to={{"{{"}}pathname: this.state.redirect_url}}/> : ""}
          <Container>
            <div className="conteudo">
              <h3>Cadastrar</h3>
              <Stack direction="row" justifyContent="flex-end" spacing={2}>
                <Fab variant="extended" size="medium" color="primary" href="/{{$data['plural']}}/list">
                  <ArrowBackIcon sx={{"{{"}} mr: 1 }} /> Voltar
                </Fab>
              </Stack>
              <div className="clearfix"></div>
              <hr/>
              <form onSubmit={this.add}>
                <Grid container justifyContent="center" alignItems="center" rowSpacing={2} columnSpacing={3}>
@foreach($data['fields'] as $field)
@if($field['name'] !== 'id' && $field['name'] !== 'created_at' && $field['name'] !== 'updated_at' && $field['name'] !== 'deleted_at')
@if($field['type'] == 'date')
                  <Grid item xl={6} md={6} sm={12} xs={12}>
                    <LocalizationProvider dateAdapter={AdapterMoment}>
                      <DatePicker
                        label="{{$field['name']}}"
                        name="{{$field['name']}}"
                        inputFormat="DD/MM/YYYY"
                        value={this.state.{{$field['name']}}}
                        onChange={this.handleDataChange.bind(this, '{{$field['name']}}')}
                        renderInput={(params) => (
                          <TextField {...params} className="form-control" error={this.state.error_{{$field['name']}}} helperText={this.state.helperText_{{$field['name']}}} />
                        )}
                      />
                    </LocalizationProvider>
                  </Grid>
@elseif($field['type'] == 'datetime')
                  <Grid item xl={6} md={6} sm={12} xs={12}>
                    <LocalizationProvider dateAdapter={AdapterMoment}>
                      <DateTimePicker
                        label="{{$field['name']}}"
                        name="{{$field['name']}}"
                        inputFormat="DD/MM/YYYY HH:mm"
                        value={this.state.{{$field['name']}}}
                        onChange={this.handleDateTimeChange.bind(this, '{{$field['name']}}')}
                        renderInput={(params) => (
                          <TextField {...params} className="form-control" error={this.state.error_{{$field['name']}}} helperText={this.state.helperText_{{$field['name']}}} />
                        )}
                      />
                    </LocalizationProvider>
                  </Grid>
@elseif($field['type'] == 'enum')
                  <Grid item xl={6} md={6} sm={12} xs={12}>
                    <FormControl error={this.state.error_{{$field['name']}}}>
                      <InputLabel id="{{$field['name']}}">{{$field['name']}}</InputLabel>
                      <Select
                        labelId="{{$field['name']}}"
                        id="{{$field['name']}}"
                        value={this.state.{{$field['name']}}}
                        label="{{$field['name']}}"
                        onChange={this.handleChange.bind(this, '{{$field['name']}}')}
                      >
                        {this.state.{{$field['name']}}_options.map((k) => (
                          <MenuItem value={k.value}>
                            {k.label}
                          </MenuItem>
                        ))}
                      </Select>
                      <FormHelperText>{this.state.helperText_{{$field['name']}}}</FormHelperText>
                    </FormControl>
                  </Grid>
@elseif($field['type'] == 'boolean' || $field['type'] == 'tinyint')
                  <Grid item xl={6} md={6} sm={12} xs={12}>
                    <FormControlLabel control={<Switch name="{{$field['name']}}" checked={this.state.{{$field['name']}}} onChange={this.handleChangeSwitch.bind(this, '{{$field['name']}}')} />} error={this.state.error_{{$field['name']}}} helperText={this.state.helperText_{{$field['name']}}} label="{{$field['name']}}" className="form-control" />
                  </Grid>
@elseif($field['foreign_key'] == TRUE)
                  <Grid item xl={6} md={6} sm={12} xs={12}>
                    <FormControl error={this.state.error_{{$field['name']}}}>
                      <InputLabel id="{{$field['name']}}">{{$field['name']}}</InputLabel>
                      <Select
                        labelId="{{$field['name']}}"
                        id="{{$field['name']}}"
                        value={this.state.{{$field['name']}}}
                        label="{{$field['name']}}"
                        onChange={this.handleChange.bind(this, '{{$field['name']}}')}
                      >
                        {this.state.{{$field['foreign_table']}}_options.map((k) => (
                          <MenuItem value={k.id}>
                            {k.name}
                          </MenuItem>
                        ))}
                      </Select>
                      <FormHelperText>{this.state.helperText_{{$field['name']}}}</FormHelperText>
                    </FormControl>
                  </Grid>
@else
                  <Grid item xl={6} md={6} sm={12} xs={12}>
                    <TextField error={this.state.error_{{$field['name']}}} helperText={this.state.helperText_{{$field['name']}}} label="{{$field['name']}}" type="{{$field['simplified_type']}}" name="{{$field['name']}}" className="form-control" value={this.state.{{$field['name']}}} onChange={this.handleChange.bind(this, '{{$field['name']}}')} />
                  </Grid>
@endif
@endif
@endforeach
                  <Grid item xl={2} md={2} sm={2} xs={2}>
                    <Fab variant="extended" type="submit" color="primary">
                        <SaveIcon sx={{"{{"}} mr: 1 }} /> Adicionar
                    </Fab>
                  </Grid>
                </Grid>
              </form>
            </div>
          </Container>
        </div>
    );
    }
}

export default {{$data['pascal_singular']}}Add;