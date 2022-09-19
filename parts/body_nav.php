<div class="nav">
    

    <ul>
        <li class="nav-item">
            <a href="/mfee29-php/smallwork/index_.php">
                首頁
            </a>
        </li>
        <li class="nav-item">
            <a href="/mfee29-php/smallwork/store/Store_index.php">
                店家
            </a>
        </li>
        <li class="nav-item">
            <a href="/mfee29-php/smallwork/chat/Chat_index.php">
                論壇
            </a>
        </li>
        <li class="nav-item">
            <a href="">

            </a>
        </li>
    </ul>


    <?php if (empty($_SESSION['user'])) : ?>
        <!-- 轉到login_system資料夾中的login.php -->
        <div class="LOGIN"><a href="../login_system/login.php">登入</a></div>  

        <div class="LOGOUT"><a class="nav-link" href="#">註冊</a></div>

    <?php else : ?>

        <div class="LOGIN"><?= $_SESSION['user']['nickname'] ?></a></div>


        <div class="LOGOUT"><a class="nav-link" href="./login_system/logout.php">登出</a></div>

    <?php endif; ?>


    <button id="" ><a href="./store/Store_index.php">店家頁面</a></button>

</div>

<!-- <script>
    let cartCountBoxNav = document.querySelector("#cartcount");

    function a() {
        fetch("getCart.php")
            .then(r => r.json())
            .then(res => {

                cartCountBoxNav.innerText = res;
            })
    }
    a();

    let cartLink = document.querySelector("#goCart");

    cartLink.addEventListener("click",(evt)=>{
        evt.preventDefault();
        fetch("checkcart.php").then(r=>r.json()).then(res=>{
            if(res==0){
                alert("購物車為空!!");
                evt.preventDefault();
            }
            else if(res==1){
                location.href = "cartPage.php";
            }
        })
        
    })


</script> -->