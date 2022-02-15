<?php

namespace App\Validation;

use App\Models\UserModel;

class Staffrules
{
    public function validateStaff(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        $staff = $model->where('email', $data['email'])->first();

        if (!$staff) {
            return false;
        }

        return password_verify($data['password'], $staff['password']);
    }
}
