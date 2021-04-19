<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController; //izin vermesi için ekliyoruz controlleri
use App\Models\Admin\Dynamic_dependent_model;

class Dynamic_dependent extends BaseController
{public function __construct()
{

    $this->load->model('dynamic_dependent_model');
}

    function index()
    {
        $data['country'] = $this->dynamic_dependent_model->fetch_country();
        $this->load->view('dynamic_dependent', $data);
    }

    function fetch_state()
    {
        if($this->input->post('country_id'))
        {
            echo $this->dynamic_dependent_model->fetch_state($this->input->post('country_id'));
        }
    }

    function fetch_city()
    {
        if($this->input->post('state_id'))
        {
            echo $this->dynamic_dependent_model->fetch_city($this->input->post('state_id'));
        }
    }

}
