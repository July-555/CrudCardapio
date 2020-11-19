import AppForm from '../app-components/Form/AppForm';

Vue.component('restaurante-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nome:  '' ,
                endereco:  '' ,
                imagem:  '' ,
                categoria:  '' ,
                login:  '' ,
                horario:  '' ,
                phone:  '' ,
                cellular:  '' ,
                social:  '' ,
                descricao:  '' ,
                
            }
        }
    }

});