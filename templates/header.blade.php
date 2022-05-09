// React Bootstrap
import { Navbar, Nav, NavDropdown, Container } from 'react-bootstrap';

function Header() {
    return(

<Navbar bg="light" expand="lg">
  <Container>
    <Navbar.Brand href={'/'}>ForexPool</Navbar.Brand>
    <Navbar.Toggle aria-controls="basic-navbar-nav" />
    <Navbar.Collapse id="basic-navbar-nav">
      <Nav className="me-auto">
        {!! htmlspecialchars_decode($data) !!}
      </Nav>
    </Navbar.Collapse>
  </Container>
</Navbar>

    )
}

export default Header;