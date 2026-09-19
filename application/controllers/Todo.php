<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Todo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Todo_model');
	}

	public function index()
	{
		// $this->load->model('Todo_model');
		$todos = $this->Todo_model->get_all();
		$data = ['todos' => $todos];
		$this->load->view('todo/list', $data);
	}

	public function create()
	{
		$this->load->view('todo/create');
	}

	public function store()
	{
		$title = $this->input->post("title");
		$description = $this->input->post("description");
		$data = [
			'title' => $title,
			'description' => $description
		];
		// echo '<pre>';print_r($_POST); echo '<pre>';
		$todos = $this->Todo_model->create($data);
		// echo '<pre>';print_r($todos); echo '<pre>';die;
		redirect("todo");
	}

	public function edit($id)
	{
		$todo = $this->Todo_model->getOne($id);
		$data = ['todo' => $todo];

		$this->load->view("todo/edit", $data);
	}

	public function update($id)
	{
		$title = $this->input->post("title");
		$description = $this->input->post("description");
		$data = [
			'title' => $title,
			'description' => $description
		];
		// echo '<pre>';print_r($_POST); echo '<pre>';
		$todos = $this->Todo_model->update($id, $data);
		redirect("todo");
	}

	public function delete($id)
	{
		$todos = $this->Todo_model->delete($id);
		redirect("todo");
	}

	public function show($id)
	{
		$todo = $this->Todo_model->getOne($id);
		$data = ['todo' => $todo];
		$this->load->view("todo/show", $data);
	}
}
