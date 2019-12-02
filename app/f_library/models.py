from django.db import models

# CustomDB!
class FItems(models.Model):
    department = models.CharField(max_lenght=30)
    user = models.CharField(max_length=30)
    predecessor = models.CharField(max_length=30)
    category = models.CharField(max_lenght=30)
    maker = models.CharField(max_length=30)
    model = models.CharField(max_length=30)
    status = models.CharField(max_length=30)
    hostname = models.CharField(max_length=50)
    purchase = models.CharField(max_length=30)
    os = models.CharField(max_length=30)
    situation = models.CharField(max_length=30)
    use_app = models.CharField(max_lenght=30)
    use_app2 = models.CharField(max_lenght=30)
    use_app3 = models.CharField(max_lenght=30)
    use_app4 = models.CharField(max_lenght=30)
    cpu = models.CharField(max_length=120)
    memory = models.IntegerField()
    ssd = models.IntegerField()
    name = models.CharField(max_length=30)
    num = models.IntegerField()
