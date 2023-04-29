import pandas as pd

df = pd.read_csv('iit.csv')
i = 0
for x in df['Institute code and Name']:
    y = x[4:]
    df.loc[i,['Institute code and Name']]
    i+=1

df.to_csv('IIT.csv')    
print('saved')