<template>
    <div>
        <button v-on:click="showAlert">Hello world</button>
        <button v-on:click="publicIp">Public Ip</button>
    </div>
</template>
<script>
import swal from 'sweetalert2';

export default {
    data() {
        return {};
    },
    methods: {
        showAlert(){
           swal('Heading', 'this is a Heading', 'success');
        },
        publicIp(){
            const ipAPI = 'https://api.ipify.org?format=json'
            swal.queue([{
            title: 'Your public IP',
            confirmButtonText: 'Show my public IP',
            text:
                'Your public IP will be received ' +
                'via AJAX request',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return fetch(ipAPI)
                .then(response => response.json())
                .then(data => swal.insertQueueStep(data.ip))
                .catch(() => {
                    swal.insertQueueStep({
                    type: 'error',
                    title: 'Unable to get your public IP'
                    })
                })
            }
            }]);

        }
    }
}
</script>
