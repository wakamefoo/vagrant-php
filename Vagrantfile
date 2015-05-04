Vagrant.configure(2) do |config|
  config.vm.box = "puphpet/centos65-x64"
  config.vm.network :private_network, ip:"192.168.33.11"
  config.vm.network :public_network
  
  config.vm.synced_folder "www", "/var/www/html", type: "nfs"

  config.vm.network "forwarded_port", guest: 80, host: 80
  config.vm.network "forwarded_port", guest: 3306, host: 3306
  config.vm.network("forwarded_port", guest: 35729, host: 35729)
  config.vm.provider "parallels" do |v|
    v.memory = 1024
    v.cpus = 1
  end
end
