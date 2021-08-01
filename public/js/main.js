function menu(id){
    console.log(document.getElementById(id).style.width)
    if (document.getElementById(id).style.width === "" || document.getElementById(id).style.width === 0){
        document.getElementById(id).style.transition = 'width 1s, opacity 0.5s'
        document.getElementById(id).style.width = '16.67%'
        document.getElementById(id).style.opacity = '1'
        document.getElementById(id).style.visibility = 'visible'
    }
    else{
        document.getElementById(id).style.transition = 'visibility 0.7s , opacity 0.6s, width 1s'
        document.getElementById(id).style.width = ""
        document.getElementById(id).style.opacity = '0'
        document.getElementById(id).style.visibility = 'hidden'
    }
}

function loading_page(id){
    // console.log(document.getElementById(id))
    document.getElementById(id).style.transition = 'visibility 4s,opacity 3s,height 2s';
    document.getElementById(id).style.opacity = '1';
    document.getElementById(id).style.height = '16.66%'
    document.getElementById(id).style.visibility = 'visible'
}

function services(id){
    if (document.getElementById(id).style.height === "" || document.getElementById(id).style.height === 0){
        document.getElementById(id).style.transition = 'height 1s, opacity 2s, visibility 3s'
        document.getElementById(id).style.height = '16.67%'
        document.getElementById(id).style.opacity = '1'
        document.getElementById(id).style.visibility = 'visible'
    }
    else{
        document.getElementById(id).style.transition = 'visibility 0.5s , opacity 0.5s, height 1s'
        document.getElementById(id).style.height = ""
        document.getElementById(id).style.opacity = '0'
        document.getElementById(id).style.visibility = 'hidden'
    }
    // console.log(document.getElementById(id).style.height)
}

function account(id){
    if (document.getElementById(id).style.height === "" || document.getElementById(id).style.height === 0){
        console.log('Working');
        document.getElementById(id).style.transition = 'height 1s, opacity 2s, visibility 3s'
        document.getElementById(id).style.height = '16.67%'
        document.getElementById(id).style.opacity = '1'
        document.getElementById(id).style.visibility = 'visible'
    }
    else{
        document.getElementById(id).style.transition = 'visibility 0.5s , opacity 0.5s, height 1s'
        document.getElementById(id).style.height = ""
        document.getElementById(id).style.opacity = '0'
        document.getElementById(id).style.visibility = 'hidden'
    }
}
