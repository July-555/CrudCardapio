import AppForm from '../app-components/Form/AppForm';

Vue.component('reserva-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                data:  '' ,
                qntd_lugares:  '' ,
                cliente_id:  '' ,
                resturante_id:  '' ,
                observacao:  '' ,
                
            }
        }
    }

});