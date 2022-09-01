<!DOCTYPE html>

<html lang="en">
    

<head>
<link href="<?php echo INCLUDE_PATH; ?>estilo/stylenft.css" rel="stylesheet" />
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minting Website</title>
    

</head>


<body>



    <div class="box1">
   


    <header1>

        <div class="wraper1">
            

           

            <a href="#">WhitePaper</a>

            <a href="#">Roadmap</a>

        </div><!--wraper-->

    </header1>
    <div class="info-mint">
        <div class="text-info-mint">
        <h2>Sobre o Projeto</h2>
        <br/>
        <p>"totam rem aperiam, eaquedl salkdl lk laçaslç, ldlskdlw , sfeiijs  flklew oijfijew wdkleo lçsodkf, lkfkkow wkle owl dlaskdlw lqwle lkmqweams,dasmda lksldkasldk, sdasdasdlw lkfei klekoi, ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem totam rem aperiam, eaquedl salkdl lk laçaslç, ldlskdlw , sfeiijs  flklew oijfijew wdkleo lçsodkf, lkfkkow wkle owl dlaskdlw lqwle lkmqweams,dasmda lksldkasldk, sdasdasdlw lkfei klekoi, ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem  
        </p>
    </div>
</div>
    
     <ul>
    <div class = "container">
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <div class = "containerbutton">
          <button class = "btn btn-compra">
            COMPRA 
        </button>

       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <button class = "btn btn-compra">
            COMPRA 
        </button>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <button class = "btn btn-compra">
            COMPRA 
        </button1>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <button class = "btn btn-compra">
            COMPRA 
        </button1>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <button class = "btn btn-compra">
            COMPRA 
        </button1>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <button class = "btn btn-compra">
            COMPRA 
        </button1>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
          <button class = "btn btn-compra">
            COMPRA 
        </button1>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2>
        
        
        
        
    </li>
    </div>
    <div class="img-info-mint">
          <li>
            
          <div style = "background-image:url('images/NFT_alpine.jpg');" class="img"></div>
           
          <button class = "btn btn-compra">
            COMPRA 
        </button1>
       
        <button class = "btn btn-venda">
            VENDA 
        </button2> 
    </li>
    </div>   
</div>     
</div>
</div>

</div>
</div>

    
    
        
            
    
    </ub>
    </li>
    </ul>
    </div>
     </div>
    </div>
    </div>
    
</div>
<div class = "clear"></div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.0-rc.0/web3.min.js"></script>

<script>

    let btn = document.querySelector('button');

    btn.addEventListener('click',()=>{

        login();

    })

    async function login(){

    if(window.ethereum){

            //Inicializar carteira.

            var web3 = new Web3(window.ethereum);

            try{

                const eth = window.ethereum;

                const accounts = await ethereum.request({method:'eth_requestAccounts'});

                const account = accounts[0];

                console.log(account);



                const sign = await ethereum.request({method:'personal_sign',params:['Mint no website https://NFT-F1.com.br',account]});

                //A partir daqui chamar contrato inteligente.

            }catch(e){}

        }else{

            alert('Instale sua carteira...');

        }

    }

</script>
</body>

</html>