import AppForm from '../app-components/Form/AppForm';

Vue.component('produto-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nome:  '' ,
                preco:  '' ,
                immagem:  '' ,
                categoria:  '' ,
                descricao:  '' ,
                
            }
        }
    }

});