<div class="form-group row align-items-center" :class="{'has-danger': errors.has('data'), 'has-success': fields.data && fields.data.valid }">
    <label for="data" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.reserva.columns.data') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.data" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('data'), 'form-control-success': fields.data && fields.data.valid}" id="data" name="data" placeholder="{{ trans('admin.reserva.columns.data') }}">
        <div v-if="errors.has('data')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('data') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('qntd_lugares'), 'has-success': fields.qntd_lugares && fields.qntd_lugares.valid }">
    <label for="qntd_lugares" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.reserva.columns.qntd_lugares') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.qntd_lugares" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('qntd_lugares'), 'form-control-success': fields.qntd_lugares && fields.qntd_lugares.valid}" id="qntd_lugares" name="qntd_lugares" placeholder="{{ trans('admin.reserva.columns.qntd_lugares') }}">
        <div v-if="errors.has('qntd_lugares')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('qntd_lugares') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cliente_id'), 'has-success': fields.cliente_id && fields.cliente_id.valid }">
    <label for="cliente_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.reserva.columns.cliente_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cliente_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cliente_id'), 'form-control-success': fields.cliente_id && fields.cliente_id.valid}" id="cliente_id" name="cliente_id" placeholder="{{ trans('admin.reserva.columns.cliente_id') }}">
        <div v-if="errors.has('cliente_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cliente_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('resturante_id'), 'has-success': fields.resturante_id && fields.resturante_id.valid }">
    <label for="resturante_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.reserva.columns.resturante_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.resturante_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('resturante_id'), 'form-control-success': fields.resturante_id && fields.resturante_id.valid}" id="resturante_id" name="resturante_id" placeholder="{{ trans('admin.reserva.columns.resturante_id') }}">
        <div v-if="errors.has('resturante_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('resturante_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observacao'), 'has-success': fields.observacao && fields.observacao.valid }">
    <label for="observacao" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.reserva.columns.observacao') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.observacao" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('observacao'), 'form-control-success': fields.observacao && fields.observacao.valid}" id="observacao" name="observacao" placeholder="{{ trans('admin.reserva.columns.observacao') }}">
        <div v-if="errors.has('observacao')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observacao') }}</div>
    </div>
</div>


