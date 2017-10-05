<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('phone', 'text')
            ->add('email', 'text')
            ->add('biography', 'textarea')
            ->add('gender', 'radio', [
                'value' => 1,
                'checked' => false
            ]);
    }
}
