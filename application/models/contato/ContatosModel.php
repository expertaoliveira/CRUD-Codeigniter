<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContatosModel extends CI_Model {

    public function listar () {

        $this->db->select("id, nome");
        $result = $this->db->get("contatos")->result();
        return $result;

    }

    public function visualizar ($id) {
        $this->db->select("id, nome, telefone, email");
        $result = $this->db->get_where("contatos", array('id' => $id))->result();
        return $result;
    }

    public function atualizar ($data, $id) {
        $this->db->where("id", $id);
        $this->db->update('contatos', $data);
    }

    public function excluir ($id) {
        $tables = array('contatos');
        $this->db->where('id', $id);
        $result = $this->db->delete($tables);
        return $result;
    }

    public function cadastrar ($data) {
        $this->db->insert('contatos', $data);
    }

}