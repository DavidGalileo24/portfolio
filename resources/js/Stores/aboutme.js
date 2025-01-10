import { defineStore } from "pinia";
import Swal from 'sweetalert2/dist/sweetalert2';

export const useAboutmeStore = defineStore("aboutme", {
    state: () => ({ 
        data: [],
     }),
    actions: {
        downloadcv(){
            Swal.fire({
                icon: 'success',
                text: 'Download CV successfully!',
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true
            });
        } 
        
    },
});
