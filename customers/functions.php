<?php

    include("../config.php");
    include(DBAPI);

    $customers = null;
    $customer = null;

    /**
     *  Listagem de Clientes
     */
    function index() {
        global $customers;
        $customers = find_all("customers");
    }

    /**
     *  Visualização de um Cliente
     */
    function view($id = null) {
        global $customer;
        $customer = find("customers", $id);
    }

    /**
     *  Exclusão de um Cliente
     */
    function delete($id = null) {

        global $customer;
        $customer = remove('customers', $id);
    
        header('location: index.php');
    }

        /**
     *	Atualizacao/Edicao de Cliente
    */
    function edit() {

        $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    
        if (isset($_GET['id'])) {
    
        $id = $_GET['id'];
    
        if (isset($_POST['customer'])) {
    
            $customer = $_POST['customer'];
            $customer['modified'] = $now->format("Y-m-d H:i:s");
    
            update('customers', $id, $customer);
            header('location: index.php');
        } else {
    
            global $customer;
            $customer = find('customers', $id);
        } 
        } else {
        header('location: index.php');
        }
    }

    function add() {

        if (!empty($_POST['customer'])) {
          
          $today = 
            date_create('now', new DateTimeZone('America/Sao_Paulo'));
      
          $customer = $_POST['customer'];
          $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
          
          save('customers', $customer);
          header('location: index.php');
        }
      }

    /**
     *  Formatação de datas
     */
    function formatadata($data, $formato) {
        $dt = new DateTime ($data, new DateTimeZone("America/Sao_Paulo"));
        return $dt -> format($formato); //"d/m/Y H:i:s"
    }

     /**
     *  Formataçao de CEP
     */
    function formatacep($cep) {
       $cf = substr($cep, 0, 5) . "-" . substr($cep, 5);
       return $cf;
   }

    /**
     *  Formataçao de celular
     */
    function formatel($telefone) {
        $te = "(" . substr($telefone, 0, 2) . ")" . " " . substr($telefone,2, 5) . "-" . substr($telefone,7, 8);
        return $te;
    }
   
    /**
     *  Formataçao de telefone
     */
    function formacel($telefone) {
        $ce = "(" . substr($telefone, 0, 2) . ")" . " " . substr($telefone,2, 4) . "-" . substr($telefone,6, 8);
        return $ce;
    }
?>