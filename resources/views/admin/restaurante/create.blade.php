@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.restaurante.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <restaurante-form
            :action="'{{ url('admin/restaurantes') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.restaurante.actions.create') }}
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