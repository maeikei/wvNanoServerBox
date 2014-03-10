
.PHONY : all s

all:
	cd ShowEnvSqlite && rails s --daemon
	cd ShowEnvMysql && rails s --daemon
s:
	ps -ax | grep rails

	
