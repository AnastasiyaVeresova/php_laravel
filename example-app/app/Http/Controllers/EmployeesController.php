<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function show($id = null)
    {
        $employees = $id ? Employees::where('id', $id)->first() : null;
        return view('employees', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        // Валидация входящих данных
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'department' => 'required|array',
            'department.*' => 'string|distinct',
        ]);

        // Создаем новый экземпляр модели Employees
        $employees = new Employees($request->except('department'));
        $employees->department = serialize($request->input('department'));

        // Сохраняем модель в базе данных
        $employees->save();

        // Возвращаем ответ или перенаправляем пользователя
        return redirect()->route('show_employees', ['id' => $employees->id]);
    }
}
