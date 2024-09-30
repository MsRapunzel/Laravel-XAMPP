<?php

use App\Models\User;
require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Retrieve an operation from the command line
$operation = $argv[1] ?? null;
$userId = $argv[2] ?? null;

function createUser() {
    // create() -> Illuminate\Database\Eloquent\Builder
    $user = User::create([
        'name' => Str::random(10),
        'email' => Str::random(10).'@example.com',
        'password' => Hash::make('password'),
        'created_at' => now(),
    ]);

    echo "User created with ID: " . $user->id . "\n";
}

function getUsers() {
    // all() -> Illuminate\Database\Eloquent\Model
    $users = User::all();
    
    // pluck() -> Illuminate\Database\Eloquent\Collection
    //            extends Illuminate\Support\Collection
    $names = $users->pluck('name');

    // filter() -> Illuminate\Support\Collection
    $filteredUsers = $users->filter(function ($user) {
        return $user->id > 1; // Фільтрувати користувачів з ID більше 1
    });
    
    // all() -> Illuminate\Support\Collection
    echo "User names: \n";
    print_r($names->all());

    // all() -> Illuminate\Support\Collection
    echo "\nFiltered Users: \n";
    print_r($filteredUsers->all());
}

function getUser($id) {
    // all() -> Illuminate\Database\Eloquent\Model
    $users = User::all();

    // find() -> Illuminate\Database\Eloquent\Collection
    //           extends Illuminate\Support\Collection
    $user = $users->find($id);

    // find() -> Illuminate\Database\Eloquent\Builder
    // $user = User::find($id);

    if ($user) {
        print_r($user->toArray());
    } else {
        echo "User with ID $id not found!\n";
    }
}

function updateUser($userId) {
    $user = User::find($userId);
    
    if ($user) {
        $user->update([
            'name' => 'Jane Doe',
            'updated_at' => now()
        ]);

        echo "User updated: " . $user->id . "\n";
    } else {
        echo "User with ID $userId not found!\n";
    }
}

function deleteUser($userId) {
    $user = User::find($userId);

    if ($user) {
        $user->delete();
        echo "User deleted: " . $user->id . "\n";
    } else {
        echo "User with ID $userId not found!\n";
    }
}

// Виклик функцій на основі операції
switch ($operation) {
    case 'create':
        createUser();
        break;
    case 'read':
        if ($userId) {
            getUser($userId);
            break;
        }
        getUsers();
        break;
    case 'update':
        if ($userId) {
            updateUser($userId);
        } else {
            echo "Please provide a user ID for updating.\n";
        }
        break;
    case 'delete':
        if ($userId) {
            deleteUser($userId);
        } else {
            echo "Please provide a user ID for deleting.\n";
        }
        break;
    default:
        echo "Invalid operation! Use 'create', 'read', 'update', or 'delete'.\n";
        break;
}
