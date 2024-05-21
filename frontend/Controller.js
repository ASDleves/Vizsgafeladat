
  class Controller{
    constructor() { 
        $.ajax({
            url: "http://localhost:8000/api/tema",
            success: function (data) {
                for (let key in data) {
                    console.log(key + ": " + data[key]['temanev']);
                    $('#tema').append($('<option>', {
                        value: data[key]['id'],
                        text: data[key]['temanev']
                    }));
                };
            
    
                
                console.log(data);
            }
        });
        $.ajax({
            url: "http://localhost:8000/api/szavak",
            success: function (data) {
                let txt = "<div class='cim1'>Angol</div><div class='cim2'>Magyar</div><div class='cim3'>visszajelzés</div>"
                
                
                
                for (let key in data) {
                    console.log(key + ": " + data[key]);
                    txt += `<div class='angol'>${data[key]['angol']}</div>`
                    txt += `<div class='magyar'><input placeholder=${data[key]['Magyar']}></div>`
                    txt += `<div class='vissza'>❌</div>`
                };
                $('article').append(txt)
    
                
                console.log(data);
            }
        });
        
    }
    

  }
  export default Controller