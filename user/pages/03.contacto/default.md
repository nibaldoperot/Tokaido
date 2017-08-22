---
title: 'Contacto'
process:
    twig: true
form:
    name: contact-form
    fields:
        -
            name: name
            label: Nombre
            placeholder: 'Ingrese su Nombre'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Correo
            placeholder: 'Ingrese su E-Mail'
            type: email
            validate:
                required: true
        -
            name: message
            label: Mensaje
            placeholder: ''
            autofocus: 'on'
            autocomplete: 'on'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Enviar
        -
            type: reset
            value: Limpiar
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Gracias por Contactarnos'
        -
            display: thankyou
---
# Contacto

##Abierto los 7 días de la semana full delivery

===

>####Paga con todo medio de pago

===

>####Te Esperamos

No paramos, nuestro local se encuentra en el corazón de la comuna de San Bernardo, y aborda comunas como, Calera de Tango, El Bosque, Nos. Tenemos delivery todos los días y también todo los medios de pago. Anímate y haz tú pedido.  

| Día(s) | Horario |
| ------ | ------- |
| Lunes a Jueves   | 12:00 a 23:30 |
| Viernes y Sábado | 12:00 a 01:30 |
| Domingo    | 12:00 a 23:30 |


## Formulario
{% include "forms/form.html.twig" with {form: forms('contact-form')} %}