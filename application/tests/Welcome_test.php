<?php 
class Welcome_test extends TestCase
{
	public function setUp()
	{
		$this->resetInstance();
		$this->CI->load->model('Admin_model');
		$this->obj = $this->CI->Admin_model;
	}

	public function test_get_category_list()
	{
		$expected = [
			1 => 'Book',
			2 => 'CD',
			3 => 'DVD',
		];

		$list = $this->obj->get_category_list();

		foreach ($list as $category) {
			$this->assertEquals($expected[$category->id], $category->name);
		}
	}
}