<?php

class Controller_Client extends Controller_Template
{

    public function action_list()
    {
        $clients = Model_Client::find('all');

        $this->template->set_global('page_name', '顧客一覧');
        $this->template->content = View::forge('client/list', compact('clients'));
    }

    public function action_detail($client_id)
    {
        $client = Model_Client::find($client_id);

        $this->template->set_global('page_name', $client->name);
        $this->template->content = View::forge('client/detail', compact('client'));
    }

    public function action_create()
    {
        if (Input::method() === 'POST') {
            $client = Model_Client::forge(array_filter(Input::post()));
            $client->save();
            Response::redirect('client/list');
        }

        $businessforms = Model_Businessform::find('all');
        $businesstypes = Model_Businesstype::find('all');

        $this->template->set_global('page_name', '顧客新規登録');
        $this->template->content = View::forge('client/form', compact('businessforms', 'businesstypes'));
    }

}
