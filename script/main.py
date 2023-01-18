import redis
import sys
from datetime import datetime

r = redis.Redis(decode_responses=True)

nom = sys.argv[1]
email = sys.argv[2] #not used for now but for futur implementation
time_now = datetime.now().strftime("%H: %M :%S")
len = r.llen(f"connexion:{nom}")
if (len > 10):
    connexion_numero_10 = r.lrange(f"connexion:{nom}", 10, 10)
    delta = datetime.strptime(time_now, "%H: %M :%S") - datetime.strptime(connexion_numero_10[0], "%H: %M :%S")
    res_min = delta.total_seconds() / 60
    print(str(res_min) + " min")

    if (res_min < 10.0):
        print("Connexion refuser plus de 10 connexion en 10 min")
    else:
        print("ok time added\n")
        r.lpush(f"connexion:{nom}", time_now)
    affichage2 = r.keys("connexion:*")
else:
    print("moin de 10 connexion enregistrer, ok added")

