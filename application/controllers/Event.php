<?php

class Event extends CI_Controller
{

    public function liste()
    {
        $this->load->model("event_model");

        $this->load->library('form_validation');
        $this->form_validation->set_rules('titre', 'Titre', 'required');
        $this->form_validation->set_rules('info', 'Information', 'required');

        if ($this->form_validation->run() !== FALSE)
        {
            $postdata["titre"] = $this->input->post('titre');
            $postdata["info"]  = $this->input->post('info');
            $this->event_model->insert($postdata);
        }

        $data['titre']         = "Liste des evenements";
        $data['all_evenement'] = $this->event_model->get_all();

        $this->load->view('event/event_liste_add_view', $data);
    }

}