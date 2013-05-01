#!/bin/sh

# This script will combine each extension into a zip file and then
# combine these zip files into a zip single package ready for installation

zip -r pkg_helloworld/packages/lib_helloworld.zip lib_helloworld/*
zip -r pkg_helloworld/packages/mod_helloworld.zip mod_helloworld/*
zip -r pkg_helloworld/packages/com_helloworld.zip com_helloworld/*
zip -r pkg_helloworld/packages/plg_helloworld.zip plg_helloworld/*

zip -r pkg_helloworld.zip pkg_helloworld/*
