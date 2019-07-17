<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {

	public function index() {
                $this->load->model('contato/ContatosModel', 'contatos');
                $result = $this->contatos->listar();
                $contatos = array ('contatos' => $result);
                $this->load->view('templates/header');
                $this->load->view('pages/listar_contatos', $contatos);
                $this->load->view('templates/footer');
        }
        
        public function excluir($id) {
                $this->load->model('contato/ContatosModel', 'contato');
                $this->contato->excluir($id);
                redirect('contatos', 'refresh');
        }

        public function alterar($id) {
                $this->load->model('contato/ContatosModel', 'contato');
                $result = $this->contato->visualizar($id);
                $contato = array ('contato' => $result);
                $this->load->view('templates/header');
                $this->load->view('pages/atualizar_contato', $contato);
                $this->load->view('templates/footer');
        }

        public function atualizar() {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nome', 'Nome', 'required');
                if ($this->form_validation->run()) {
                        $this->load->model('contato/ContatosModel', 'contato');
                        $data = array (
                                "nome" => $this->input->post("nome"),
                                "telefone" => $this->input->post("telefone"),
                                "email" => $this->input->post("email"),
                        );
                        $this->contato->atualizar($data, $this->input->post("id"));
                        redirect(base_url());
                }
                else {
                        $this->novo();
                }
        }

        public function visualizar($id) {
                $this->load->model('contato/ContatosModel', 'contato');
                $result = $this->contato->visualizar($id);
                $contato = array ('contato' => $result);
                $this->load->view('templates/header');
                $this->load->view('pages/visualizar_contato', $contato);
                $this->load->view('templates/footer');
        }

        public function novo() {
                $this->load->view('templates/header');
                $this->load->view('pages/novo_contato');
                $this->load->view('templates/footer');
        }

        public function cadastrar() {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nome', 'Nome', 'required');
                if ($this->form_validation->run()) {
                        $this->load->model('contato/ContatosModel', 'contato');
                        $data = array (
                                "nome" => $this->input->post("nome"),
                                "telefone" => $this->input->post("telefone"),
                                "email" => $this->input->post("email"),
                        );
                        $this->contato->cadastrar($data);
                        redirect(base_url());
                }
                else {
                        $this->novo();
                }
        }

}