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

}
