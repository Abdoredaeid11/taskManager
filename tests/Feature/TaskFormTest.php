<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskFormTest extends TestCase
{
    public function test_livewire_creation(){

$this->get(route('task.create'))->assertSeeLivewire('create-task');


    }
    public function task_form_can_create_a_task()
    {
        Livewire::test('task-form')
            ->set('name', 'Sample Task')
            ->set('description', 'Sampledsadas Task')
            ->set('status', 'Not Started')
            ->set('priority', 'High')
            ->set('due_date', '2025-01-01')
            ->call('saveTask')
            ->assertRedirect(route('tasks.index'));}

}
