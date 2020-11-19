<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nome'), 'has-success': fields.nome && fields.nome.valid }">
    <label for="nome" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.produto.columns.nome') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nome" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nome'), 'form-control-success': fields.nome && fields.nome.valid}" id="nome" name="nome" placeholder="{{ trans('admin.produto.columns.nome') }}">
        <div v-if="errors.has('nome')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nome') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('preco'), 'has-success': fields.preco && fields.preco.valid }">
    <label for="preco" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.produto.columns.preco') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.preco" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('preco'), 'form-control-success': fields.preco && fields.preco.valid}" id="preco" name="preco" placeholder="{{ trans('admin.produto.columns.preco') }}">
        <div v-if="errors.has('preco')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('preco') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('immagem'), 'has-success': fields.immagem && fields.immagem.valid }">
    <label for="immagem" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.produto.columns.immagem') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.immagem" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('immagem'), 'form-control-success': fields.immagem && fields.immagem.valid}" id="immagem" name="immagem" placeholder="{{ trans('admin.produto.columns.immagem') }}">
        <div v-if="errors.has('immagem')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('immagem') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categoria'), 'has-success': fields.categoria && fields.categoria.valid }">
    <label for="categoria" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.produto.columns.categoria') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.categoria" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('categoria'), 'form-control-success': fields.categoria && fields.categoria.valid}" id="categoria" name="categoria" placeholder="{{ trans('admin.produto.columns.categoria') }}">
        <div v-if="errors.has('categoria')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categoria') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descricao'), 'has-success': fields.descricao && fields.descricao.valid }">
    <label for="descricao" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.produto.columns.descricao') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descricao" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descricao'), 'form-control-success': fields.descricao && fields.descricao.valid}" id="descricao" name="descricao" placeholder="{{ trans('admin.produto.columns.descricao') }}">
        <div v-if="errors.has('descricao')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descricao') }}</div>
    </div>
</div>


