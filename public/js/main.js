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

