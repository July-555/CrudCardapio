<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nome'), 'has-success': fields.nome && fields.nome.valid }">
    <label for="nome" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.nome') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nome" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nome'), 'form-control-success': fields.nome && fields.nome.valid}" id="nome" name="nome" placeholder="{{ trans('admin.restaurante.columns.nome') }}">
        <div v-if="errors.has('nome')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nome') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('endereco'), 'has-success': fields.endereco && fields.endereco.valid }">
    <label for="endereco" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.endereco') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.endereco" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('endereco'), 'form-control-success': fields.endereco && fields.endereco.valid}" id="endereco" name="endereco" placeholder="{{ trans('admin.restaurante.columns.endereco') }}">
        <div v-if="errors.has('endereco')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('endereco') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('imagem'), 'has-success': fields.imagem && fields.imagem.valid }">
    <label for="imagem" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.imagem') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.imagem" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('imagem'), 'form-control-success': fields.imagem && fields.imagem.valid}" id="imagem" name="imagem" placeholder="{{ trans('admin.restaurante.columns.imagem') }}">
        <div v-if="errors.has('imagem')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('imagem') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categoria'), 'has-success': fields.categoria && fields.categoria.valid }">
    <label for="categoria" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.categoria') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.categoria" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('categoria'), 'form-control-success': fields.categoria && fields.categoria.valid}" id="categoria" name="categoria" placeholder="{{ trans('admin.restaurante.columns.categoria') }}">
        <div v-if="errors.has('categoria')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categoria') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('login'), 'has-success': fields.login && fields.login.valid }">
    <label for="login" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.login') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.login" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('login'), 'form-control-success': fields.login && fields.login.valid}" id="login" name="login" placeholder="{{ trans('admin.restaurante.columns.login') }}">
        <div v-if="errors.has('login')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('login') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('horario'), 'has-success': fields.horario && fields.horario.valid }">
    <label for="horario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.horario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.horario" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('horario'), 'form-control-success': fields.horario && fields.horario.valid}" id="horario" name="horario" placeholder="{{ trans('admin.restaurante.columns.horario') }}">
        <div v-if="errors.has('horario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('horario') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
    <label for="phone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.phone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.restaurante.columns.phone') }}">
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cellular'), 'has-success': fields.cellular && fields.cellular.valid }">
    <label for="cellular" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.cellular') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cellular" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cellular'), 'form-control-success': fields.cellular && fields.cellular.valid}" id="cellular" name="cellular" placeholder="{{ trans('admin.restaurante.columns.cellular') }}">
        <div v-if="errors.has('cellular')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cellular') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('social'), 'has-success': fields.social && fields.social.valid }">
    <label for="social" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.social') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.social" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('social'), 'form-control-success': fields.social && fields.social.valid}" id="social" name="social" placeholder="{{ trans('admin.restaurante.columns.social') }}">
        <div v-if="errors.has('social')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('social') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descricao'), 'has-success': fields.descricao && fields.descricao.valid }">
    <label for="descricao" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.restaurante.columns.descricao') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descricao" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descricao'), 'form-control-success': fields.descricao && fields.descricao.valid}" id="descricao" name="descricao" placeholder="{{ trans('admin.restaurante.columns.descricao') }}">
        <div v-if="errors.has('descricao')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descricao') }}</div>
    </div>
</div>


