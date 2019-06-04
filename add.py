from flask import Flask 
import  requests
add=Flask(__name__)
from flask import request


@add.route('/read',methods=['GET'])
def index():
    if(request.method=='GET'):
        x=request.args['num1']
        y=request.args['num2']
        z=request.args['op']
        xx=0
        if(z=='a'):
           xx=int(x)+int(y)
        
        if(z=='s'):
           xx=int(x)-int(y)
            
        if(z=='m'):
          xx=int(x)*int(y)
           
        if(z=='d'):
          xx=int(x)/int(y)
            
    return str(xx)

       
   

if(__name__=='__main__'):
    add.run()