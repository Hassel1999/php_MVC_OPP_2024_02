<?php 
require_once('src/Dao/CustomerModel.php');

class CustomerController {

    private $model_c;

    function __construct(){
        $this->model_c = new CustomerModel();
    }

    function index() {
        $query = $this->model_c->get();

        include_once('src/views/header.php');
        include_once('src/views/index.php'); // Vista principal que muestra todos los clientes.
        include_once('src/views/footer.php');
    }

    function customer() {
        $data = NULL;
        if (isset($_REQUEST['id'])) {
            $data = $this->model_c->get_id($_REQUEST['id']);    
        }
        $query = $this->model_c->get();
        include_once('src/views/header.php');
        include_once('src/views/customerView.php'); // Vista específica para mostrar/editar un cliente.
        include_once('src/views/footer.php');
    }

    function get_datosC() {

        $data['id'] = $_REQUEST['txt_id'];
        $data['FirstName'] = $_REQUEST['txt_FirstName'];
        $data['LastName'] = $_REQUEST['txt_LastName'];
        $data['Email'] = $_REQUEST['txt_Email'];
        $data['Phone'] = $_REQUEST['txt_Phone'];

        if ($_REQUEST['id'] == "") {
            $this->model_c->create($data);
        } else {
            $this->model_c->update($data);
        }
        
        header("Location:index.php");
    }

    function confirmarDelete() {

        $data = NULL;

        if ($_REQUEST['id'] != 0) {
            $data = $this->model_c->get_id($_REQUEST['id']);
        }

        if ($_REQUEST['id'] == 0) {
            $date['id'] = $_REQUEST['txt_id'];
            $this->model_c->delete($date['id']);
            header("Location:index.php");
        }

        include_once('src/views/header.php');
        include_once('src/views/confirm.php'); // Vista para confirmar la eliminación de un cliente.
        include_once('src/views/footer.php');
    }
}
?>
