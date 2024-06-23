from django.test import TestCase
from .models import *
from .forms import *


class ModelTests(TestCase):

    def setUp(self):
        self.appliance = Product.objects.create(
            product_id=1,
            name='Blender',
            description='A high-quality blender for your kitchen.',
            price=100.0,
            discount=10.0,
            stock=50,
            category='Kitchen Appliances'
        )

    def check_product_string(self):
        self.assertEqual(str(self.appliance), 'Blender')

    def check_product_discounted_price(self):
        self.assertEqual(self.appliance.get_price_with_discount(), 90.0)


class FormValidationTests(TestCase):

    def validate_product_form(self):
        form_data = {
            'product_id': 1,
            'name': 'Blender',
            'description': 'A high-quality blender for your kitchen.',
            'price': 100.0,
            'discount': 10.0,
            'stock': 50,
            'category': 'Kitchen Appliances'
        }
        form = ProductForm(data=form_data)
        self.assertTrue(form.is_valid())

    def validate_user_form(self):
        form_data = {
            'username': 'testuser',
            'password': 'password123',
            'email': 'testuser@example.com',
            'first_name': 'Test',
            'last_name': 'User'
        }
        form = UserForm(data=form_data)
        self.assertTrue(form.is_valid())

    def validate_order_form(self):
        user = User.objects.create_user(username='testuser', password='password123')
        form_data = {
            'user': user.id,
            'product': self.appliance.id,
            'quantity': 2,
            'address': '123 Main St., Anytown, USA',
            'status': 'Pending'
        }
        form = OrderForm(data=form_data)
        self.assertTrue(form.is_valid())
