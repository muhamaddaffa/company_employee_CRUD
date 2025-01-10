<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label"><strong>Company Name:</strong></label>
                                <input
                                    type="text"
                                    value="{{ $company->name }}"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    placeholder="Company Name">
                                @error('name')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>Email:</strong></label>
                                <input
                                    type="email"
                                    value="{{ $company->email }}"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    placeholder="Company Email">
                                @error('email')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="website" class="form-label"><strong>Website:</strong></label>
                                <input
                                    type="url"
                                    value="{{ $company->website }}"
                                    name="website"
                                    class="form-control @error('website') is-invalid @enderror"
                                    id="website"
                                    placeholder="Company Website">
                                @error('website')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="form-label"><strong>Logo:</strong></label>
                                <input
                                    type="file"
                                    name="logo"
                                    class="form-control @error('logo') is-invalid @enderror"
                                    id="logo">
                                @error('logo')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Upadte Company</button>
                            <a class="btn btn-secondary btn" href="{{ route('employees.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>