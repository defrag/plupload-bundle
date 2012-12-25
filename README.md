Defrag Plupload Bundle
===============

Bundle for multiple uploads using Plupload

## Installation **(Symfony 2.0.x only)**

##### 1. Add the following to your `composer.json` file:

```ini
    "defrag/plupload-bundle" : "dev-master"
```

##### 2. Run composer update:

```
    php composer.phar update defrag/plupload-bundle
```

##### 3. Register bundle in AppKernel.php
   
```php
    new Defrag\PluploadBundle\DefragPluploadBundle(),       
```

##### 4. Set up configuration

```ini
    defrag_plupload:
        upload_service: re.asset_manager
        orm_class: RE\AssetBundle\Entity\Asset
```

##### 5. Add to your form
```php
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('assets', 'plupload')            
        ;
    }
```

upload_service shall implement Defrag\PluploadBundle\Mode\UploaderInterface. 

This bundle just sets up basic plupload to use on existing site. 
Bundle is still in alpha, ive just recenly extraced it to be independent.

