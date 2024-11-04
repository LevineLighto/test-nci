function testnci(){ 
    let x = 1 
    let y = 2

    console.log('x awal:', x) 
    console.log('y awal:', y)
    
    x += y
    y -= x
    x += y
    y = Math.abs(y)
    
    console.log('x final:', x) 
    console.log('y final:', y) 
} 

testnci() 