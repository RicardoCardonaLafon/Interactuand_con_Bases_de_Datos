module.exports.insertarRegistro = function (db, callback){
    let coleccion = db.collection("users")
    coleccion.insertMany([
        {Usuario: "Ricardo", Passw: 12345}
    ],(error,result)=>{
        console.log("Resultado de insert: " + result.toString())
    })
}