from flask import Flask 
import  requests
reg=Flask(__name__)
from flask import request


@reg.route('/read',methods=['GET'])
def index():
    if(request.method=='GET'):
        a=request.args['id']
        b=request.args['rad']
        c=request.args['tex']
        d=request.args['smo']
        e=request.args['com']
        f=request.args['sym']
        g=request.args['fra']
        h=request.args['rads']
        i=request.args['texs']
        j=request.args['smos']
        k=request.args['coms']
        l=request.args['syms']
        m=request.args['fras']
        print(a)
        print(b)
        print(c)
        print(d)
        print(e)
        print(f)
        print(g)
        print(h)
        print(i)
        print(j)
        print(k)
        print(l)
        print(m)
    return a

       
   

if(__name__=='__main__'):
    reg.run()
