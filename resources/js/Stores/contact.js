import { defineStore } from "pinia";
import { useForm } from '@inertiajs/vue3';
import Swal from 'sweetalert2/dist/sweetalert2';

export const useContactStore = defineStore("contact", {
    state: () => ({ 
        data: [],
        edit: '',
        form: useForm({
            name: '',
            email: '',
            description: '',
        })
     }),
    actions: {
        contactForm(){
            this.form.post(route('storecontact'));
            clearForm();
            alert();
        },
        clearForm(){
            this.form.name = '';
            this.form.email = '';
            this.form.description = '';
        },
        alert(){
            Swal.fire({
                icon: 'success',
                text: 'Sending email successfully!',
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true
            });
        } 
    },
});
