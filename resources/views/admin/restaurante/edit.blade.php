@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.restaurante.actions.edit', ['name' => $restaurante->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <restaurante-form
                :action="'{{ $restaurante->resource_url }}'"
                :data="{{ $restaurante->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.restaurante.actions.edit', ['name' => $restaurante->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.restaurante.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </restaurante-form>

        </div>
    
</div>

@endsection