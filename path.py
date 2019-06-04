from flask import Flask 
import  requests
path=Flask(__name__)
from flask import request


@path.route('/read',methods=['GET'])
def index():
    if(request.method=='GET'):
        x=request.args['name']
        y=request.args['roll']
        z=request.args['adno']
        w=request.args['clg']
        print(x)
        print(y)
        print(z)
        print(w)
    return x

       
   

if(__name__=='__main__'):
    path.run()