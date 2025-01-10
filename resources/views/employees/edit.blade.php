<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <form action="{{ route('employees.update',$employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="firstname" class="form-label"><strong>FirstName:</strong></label>
                                <input
                                    type="text"
                                    value="{{$employee->firstname}}"
                                    name="firstname"
                                    class="form-control @error('firstname') is-invalid @enderror"
                                    id="firstname"
                                    placeholder="FirstName">
                                @error('firstname')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label"><strong>LastName:</strong></label>
                                <input
                                    type="text"
                                    value="{{$employee->lastname}}"
                                    name="lastname"
                                    class="form-control @error('lastname') is-invalid @enderror"
                                    id="lastname"
                                    placeholder="LastName">
                                @error('LastName')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>Email:</strong></label>
                                <input
                                    type="email"
                                    value="{{$employee->email}}"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    placeholder="Email">
                                @error('Email')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label"><strong>Phone:</strong></label>
                                <input
                                    type="text"
                                    value="{{$employee->phone}}"
                                    name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    id="phone"
                                    placeholder="Phone">
                                @error('Phone')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Update Employee</button>
                            <a class="btn btn-secondary btn" href="{{ route('employees.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>