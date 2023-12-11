window.addEventListener("load",event=>{

    window.onbeforeunload = function() {
        alert("Don't")
    }

    let home= document.querySelector("aside div.menucombo button#home");
    let changearea= document.querySelector("section#changearea");
    let issuelinks = document.querySelectorAll("table#Contacts tr td a");
    let filterurl = "";
    home.onclick= event=>{
        changearea.innerHTML="";
        const listUrl = new URL('http://localhost/info2180-finalproject-main/scripts/home.php');
        let params = {btn: "all"};
        listUrl.search = new URLSearchParams(params).toString();
        fetch(listUrl, {method : 'GET'})
            .then(resp => resp.text())
            .then(resp=>{
            changearea.innerHTML =resp;
            document.querySelector("table#Contacts").classList.add("Contacts");
            })
       
    }

    setInterval( ()=>{

        const homecreatebtn =  document.querySelector("section.homeheadparent button#createissuebtn");
        const getformUrl = "scripts/addcontact.php".replace( /"[^-0-9+&@#/%=~_|!:,.;\(\)]"/g,'');
        if (document.contains(homecreatebtn)){
            let filterall = document.querySelector("section#filter button#all");
            let filteropen = document.querySelector("section#filter button#open");
            let filtersalesleads = document.querySelector("section#filter button#salesleads");
            homecreatebtn.onclick=event=>{
                fetch(getformUrl, {method : 'GET'})
                .then(resp => resp.text())
                .then(resp=>{
                    changearea.innerHTML = resp;
                })
            }
            filteropen.onclick =(event)=>{
                filterurl = new URL('http://localhost/info2180-finalproject-main/scripts/home.php');
                let params = {btn: "open"};
                filterurl.search = new URLSearchParams(params).toString();
                fetch(filterurl, {method : 'GET'})
                .then(resp => resp.text())
                .then(resp=>{
                    changearea.innerHTML = resp;
                    document.querySelector("table#Contacts").classList.add("Contacts");
                })
        
            }
            filtersalesleads.onclick =(event)=>{
                filterurl = new URL('http://localhost/info2180-finalproject-main/scripts/home.php');
                let params = {btn: "salesleads"};
                filterurl.search = new URLSearchParams(params).toString();
                fetch(filterurl, {method : 'GET'})
                .then(resp => resp.text())
                .then(resp=>{
                    changearea.innerHTML = resp;
                    document.querySelector("table#Contacts").classList.add("Contacts");
                })
        
            }

            filterall.onclick =(event)=>{
                filterurl = new URL('http://localhost/info2180-finalproject-main/scripts/home.php');
                let params = {btn: "all"};
                filterurl.search = new URLSearchParams(params).toString();
                fetch(filterurl, {method : 'GET'})
                .then(resp => resp.text())
                .then(resp=>{
                    changearea.innerHTML = resp;
                    document.querySelector("table#Contacts").classList.add("Contacts");
                })
        
            }

        }
           

    },1000);


});