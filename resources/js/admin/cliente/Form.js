import AppForm from '../app-components/Form/AppForm';

Vue.component('cliente-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nome:  '' ,
                imagem:  '' ,
                login:  '' ,
                phone:  '' ,
                
            }
        }
    }

});