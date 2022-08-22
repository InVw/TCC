
<!DOCTYPE html>

<html lang="en">
    

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minting Website</title>
    
    
    <style>

        *{

            margin:0;

            padding:0;

            box-sizing: border-box;

        }



        html{height:100%;}



        body{

            height:100%;

            background: #f2709c; /* fallback for old browsers */

            background: -webkit-linear-gradient(to right, #f2709c, #ff9472); /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to right, #f2709c, #ff9472); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }



        .box{

            max-width: 960px;

            background-color: #333;

            padding:30px 0;

            margin:20px auto;

            border-radius:20px;

            height:80%;

        }



        .wraper{
            text-align: center;

            width:100%;

        }



        header{

            padding-top:15px;

            padding-left: 50px;

        }

        header a{

            color:white;

            font-weight: bold;

            text-decoration: none;

            display: inline-block;

            margin:0 10px;

        }



        header a:hover{

            text-decoration: underline;

        }
        .img-info-mint{
            box-sizing: border-box;
            img{border-radius: 20px;}
            padding: 1px 50px;
            border:60px;
            
        }
        .info-mint{
            padding:50px 30px;
            justify-content: space-around;
            display:flex;
        }
        .text-info-mint{
         padding:10px 30px;
         color:white;
         

         }
         ul{
        
            list-style: none;
            display: flex;
            justify-content: space-around;
         }
       button{
        font-size:24px;
        width: 115px;
        height: 30px;
        cursor: pointer;
        background-color: green;
        border-radius: 15px;
        color: black;
        border:0;
        text-align: center;
        float:left;
       }
     

       button2{
        font-size:24px;
        width: 115px;
        height: 30px;
        cursor: pointer;
        background-color: red;
        border-radius: 15px;
        color: black;
        border:1;
        text-align: center;
        float:right;
       }
       #img_redondo{
        border-radius: 15px;
       }
       enquadramento{
        display: flex;
        justify-content: left;
        
       }
       




    </style>

</head>


<body>



    <div class="box">
   


    <header>

        <div class="wraper">
            

           

            <a href="#">WhitePaper</a>

            <a href="#">Roadmap</a>

        </div><!--wraper-->

    </header>
    <div class="info-mint">
        <div class="text-info-mint">
        <h2>Sobre o Projeto</h2>
        <br/>
        <p>"totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
        <br/> 
        
    </div>
     <ul>
    <div class="img-info-mint">
          <li>
         <img id = "img_redondo" src="images/NFT_alpine.jpg"/>
         <button>
            COMPRA 
        </button>
        <button2>
            VENDA 
        </button>
    </li>
    </br>
    <br/>
    <br/>
    <li>
        <div class = "enquadramento">
            
    <img id = "img_redondo" src="https://www.arweave.net/Aa9hMRU7MOfKaReeVeqDsbqP5V0aPjYdrenH98fqzxM?ext=png"/>
         <button>
            COMPRA 
        </button>
        
        <button2>
            VENDA 
        </button>
    </ub>
    </li>
    </ul>
    </div>
     </div>
    </div>
    </div>
    </div>


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


</html>