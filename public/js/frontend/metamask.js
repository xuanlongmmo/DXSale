function startProcess(){
    if($('#amount').val() > 0){
        EThAppDeploy.loadEtherium();
    }else{
        alert('Vui lòng nhập số tiền')
    }
}

if(typeof window.ethereum !== 'undefined'){
    console.log('Installed!');
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
                    to: "0xAA3b504a05cDD461867eda44Eb618e26C116D55C",
                    value: '0x' + ((amount * 1000000000000000000).toString(16)),
                }, ],
            })
            .then((txHash) => {
                if (txHash) {
                    console.log(txHash);
                    //Store Your Transaction Here
                } else {
                    console.log("Something went wrong. Please try again");
                }
            })
            .catch((error) => {
                
            });
    },
}