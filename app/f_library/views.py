from django.shortcuts import render, redirect, get_object_or_404
from django.views.generic import TemplateView
from f_library.models import *

class index(TemplateView):
    template_name = 'index.html'

    def get(self, request):
        return render(self.request, self.template_name)

class items(TemplateView):
    template_name = 'items.html'

    def get(self, request, post_id):
        post = get_object_or_404(Post, post_id)
        return render(self.request, self.template_name, {'post': post})
