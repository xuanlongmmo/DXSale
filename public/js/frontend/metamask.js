function startProcess(){
    if($('#amount').val() > 0){
        EThAppDeploy.loadEtherium();
    }else{
        alert('Vui lòng nhập số tiền')
    }
}

async function getAccount() {
    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    return accounts[0];
}

EThAppDeploy = {
    loadEtherium: async () => {
        if (typeof window.ethereum !== 'undefined') {
            EThAppDeploy.web3Provider = ethereum;
            EThAppDeploy.requestAccount(ethereum);
        } else {
            alert(
                "Not able to locate an Ethereum connection, please install a Metamask wallet"
            );
        }
    },

    /****
     * Request A Account
     * **/
    requestAccount: async (ethereum) => {
        ethereum
            .request({
                method: 'eth_requestAccounts'
            })
            .then((resp) => {
                //do payments with activated account
                EThAppDeploy.payNow(ethereum, resp[0]);
            })
            .catch((err) => {
                // Some unexpected error.
                console.log(err);
            });
    },

    /****
     * Check A Account
     * **/
    checkAccount: async (ethereum) => {
        ethereum
            .request({
                method: 'eth_requestAccounts'
            })
            .then((resp) => {
                $('#loginlogin').css('display', 'flex');
                $('#notloginlogin').css('display', 'none');
                var address = '';
                for (let index = 0; index <= 5; index++) {
                    address = address + resp[0][index];
                }

                address = address + '...';

                for (let index = resp[0].length - 4; index < resp[0].length; index++) {
                    address = address + resp[0][index];
                }
                $('#address_meta').html(address);
                $('#checkacc').html(resp[0]);
            })
            .catch((err) => {

            });
    },

    /***
     *
     * Do Payment
     * */
    payNow: async (ethereum, from) => {
        var amount = $('#amount').val();
        ethereum
            .request({
                method: 'eth_sendTransaction',
                params: [{
                    from: from,
                    to: $('#addressreceive').val(),
                    value: '0x' + ((amount * 1000000000000000000).toString(16)),
                }, ],
            })
            .then((txHash) => {
                if (txHash) {
                    console.log(txHash);
                    saveamount(amount, from);
                } else {
                    console.log("Something went wrong. Please try again");
                }
            })
            .catch((error) => {
                
            });
    },
}

EThAppDeploy.web3Provider = ethereum;
EThAppDeploy.checkAccount(ethereum);

function connectmeta() {
    EThAppDeploy.web3Provider = ethereum;
    EThAppDeploy.requestAccount(ethereum);
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function saveamount(amount, from) {
    var idtoken = $('#idtoken').val();
    if (idtoken != undefined) {
        $(document).ready(function(){
            $.ajax({
                url:"metamask/transaction/create",
                method:'post',
                data: {
                    amount:amount,
                    from:from,
                    idtoken:idtoken
                },
                success: function(data){
                    if (data == 1) {
                        toastr.success("Buy token success!");
                    } else {
                        toastr.error("Buy token error reload page and retry!");
                    }
                    $('#formamount').hide('slow'); 
                    $('#btn__cancel').hide();
                    $('#btn__buy').attr('onclick', 'return showinput()');
                },
            });
        });
    }
}